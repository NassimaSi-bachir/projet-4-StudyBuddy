<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->remove('roles')
            ->add('plainPassword', PasswordType::class,[
                'label'=>"Nouveau mot de passe",
                'mapped' => false,
                ])
            // ->add('password')
            ->add('name')
            ->add('surname')
            // ->add('imageName')
            // ->add('slug')
            // ->add('updatedAt')
            ->add('date')
            ->add('favoris')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
