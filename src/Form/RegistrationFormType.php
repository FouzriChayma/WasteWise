<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\FormInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your name']),
                ],
            ])
            ->add('LastName', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your last name']),
                ],
            ])
            ->add('UserName')
            ->add('ddn', DateType::class, [
                'widget' => 'single_text',
                'input' => 'string',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your date of birth']),
                ],
            ])
            ->add('email', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email']),
                ],
            ])
            ->add('ImagePath', FileType::class, [
                'label' => 'Image (JPG, PNG or GIF file)',
                'constraints' => [
                    new NotBlank(['message' => 'Please upload an image']),
                ],
            ])
            ->add('password', PasswordType::class, [
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your password']),
                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',
                        'message' => 'Your password must contain at least one lowercase letter, one uppercase letter, one number, and be at least 8 characters long',
                    ]),
                ],
            ])
            ->add('confirm_password', PasswordType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please confirm your password']),
                   
                ],
            ])
            ->add('prefrole', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'Admin',
                    'Supplier' => 'Supplier',
                    'Client' => 'Client',
                    'Driver' => 'Driver',
                ],
                'placeholder' => 'Account category',
                'constraints' => [
                    new NotBlank(['message' => 'Please select your preferred role']),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank(['message' => 'You should agree to our terms.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
