<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('LastName')
            ->add('UserName')
            ->add('ddn', DateType::class, [
                'widget' => 'single_text',
                'input' => 'string',
                
               
            ])
            ->add('email')
            ->add('ImagePath', FileType::class, [
                'label' => 'Image (JPG, PNG or GIF file)',
                
            ])
             
            
         
        
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
               
            ])
            ->add('confirm_password', PasswordType::class, [
                'mapped' => false, // This field is not mapped to the entity
              
            ])
            ->add('prefrole', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'Admin',
                    'Supplier' => 'Supplier',
                    'Client' => 'Client',
                    'Driver' => 'Driver',
                ],
                'placeholder' => 'Account category',
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
