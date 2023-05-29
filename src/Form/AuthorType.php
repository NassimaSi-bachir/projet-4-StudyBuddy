<?php

namespace App\Form;

use App\Entity\Author;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('pseudo')
            ->add('imageFile', FileType::class, [
                'required'=>false,
                'label'=>"Photo de l'auteur",
            ])
            ->add('biography')
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
