<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->remove('slug')
            ->add('imageFile', FileType::class, [
                'required'=>false,
                'label'=>"Votre image de catégorie",
            ])
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
            'data_class' => Category::class,
        ]);
    }
}
