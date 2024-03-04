<?php

namespace App\Form;

use App\Entity\Association;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
class AssociationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('adresse')
            ->add('email')
            ->add('ImagePath', FileType::class, [
                'label' => 'Submit your identification file (pdf, png, jpg)',
                'required' => false,
                'data_class' => null,
                

                
                'attr' => [
                    'accept' => '.pdf, .png, .jpg', // Types MIME autorisés
                ],
            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Association::class,
        ]);
    }

    
}


