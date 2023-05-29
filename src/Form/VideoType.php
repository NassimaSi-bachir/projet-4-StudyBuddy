<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
// use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class VideoType extends AbstractType
{
    private function getYearsChoices(): array
    {
        $currentYear = (int)date('Y');
        $years = range($currentYear, $currentYear - 100, -1); // Par exemple, de l'année actuelle jusqu'à 100 ans en arrière
    
        $choices = [];
        foreach ($years as $year) {
            $choices[$year] = $year;
        }
    
        return $choices;
    }
    


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            // ->add('imageName')
            ->remove('slug')
            ->add('videoFile', FileType::class, [
                'required'=>false,
                'label'=>"Votre fichier vidéo",
            ])
            ->remove('duration')
            //->add('videoName')
            ->remove('updatedAt', DateTimeType::class, [
                'widget'=>'single_text',
                'data'=> new \DateTimeImmutable(),
            ])
            // ->add('creationDate')
            ->add('creationDate', ChoiceType::class, [
                'choices' => $this->getYearsChoices(),
            ])
            ->add('author', EntityType::class, [
                'class'=> 'App\Entity\Author',
                'multiple'=> true, //Pouvoir avoir plusieurs auteurs
                'expanded'=>true, //Cases à cocher
            ])
            ->add('category', EntityType::class, [
                'class'=> 'App\Entity\Category',
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
