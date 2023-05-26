<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description', CKEditorType::class)
            // ->add('imageName')
            ->remove('slug')
            ->remove('duration')
            //->add('videoName')
            ->remove('updatedAt', DateTimeType::class, [
                'widget'=>'single_text',
                'data'=> new \DateTimeImmutable(),
            ])
            ->add('creationDate')
            ->add('author', EntityType::class, [
                'class'=> 'App\Entity\Author',
                'multiple'=> true, //Pouvoir avoir plusieurs auteurs
                'expanded'=>true, //Cases à cocher
            ])
            ->add('category', EntityType::class, [
                'class'=> 'App\Entity\Cateogory',
                'multiple'=> true, //Pouvoir avoir plusieurs auteurs
                'expanded'=>true, //Cases à cocher
            ])
            // ->add('view')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
