<?php

namespace App\Form;

use App\Entity\Author;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('pseudo')
            ->add('biography', CKEditorType::class)
            // ->add('imageName')
            ->remove('slug')
            ->add('videos', EntityType::class, [
                'class'=> 'App\Entity\Video',
                'multiple'=> true, //Pouvoir avoir plusieurs auteurs
                'expanded'=>true, //Cases à cocher
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Author::class,
        ]);
    }
}
