<?php

namespace App\Form;

use App\Entity\OurOrder;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Import ChoiceType


class OurOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('quantityO')
            ->add('stock')
        ;
        if (!$options['exclude_status']) {
            $builder
                ->add('statusO', ChoiceType::class, [
                    'choices' => [
                        'Pending' => 'Pending',
                        'Delivered' => 'Delivered',
                        'Cancelled' => 'Cancelled',
                    ],
                    'placeholder' => 'Choose status',
                    'required' => false,
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OurOrder::class,
            'exclude_status' => false,


        ]);
    }
}
