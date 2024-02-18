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
use Symfony\Component\Form\DataTransformerInterface;
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
            ->add('ImagePath', FileType::class, [
                'label' => 'Image (JPG, PNG or GIF file)',
                'data_class' => null,
                
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

            ])
            ->get('ImagePath')
            ->addModelTransformer(new class implements DataTransformerInterface {
                public function transform($value)
                {
                    return null;
                }

                public function reverseTransform($value)
                {
                    if (!$value) {
                        return;
                    }

                    if (is_string($value)) {
                        return new File($this->uploadsDirectory.'/'.$value);
                    }

                    return $value;
                }
                });;


        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
