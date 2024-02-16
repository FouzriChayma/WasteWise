<?php

namespace App\Form;

use App\Entity\User;
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
use App\Form\DataTransformer\BooleanTransformer;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('name')
            ->add('LastName')
            ->add('UserName')
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'Admin',
                    'Supplier' => 'Supplier',
                    'Client' => 'Client',
                    'Driver' => 'Driver',
                ],
                'placeholder' => 'Account category',
            ])
            ->add('isBanned', CheckboxType::class, [
                'label' => 'Is Banned',
                'required' => false,
            ])
            ->add('IsVerified', CheckboxType::class, [
                'label' => 'Is Verified',
                'required' => false,
            ])
            ->add('ddn', DateType::class, [
                'widget' => 'single_text',
                'input' => 'string',
            ]);

        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
