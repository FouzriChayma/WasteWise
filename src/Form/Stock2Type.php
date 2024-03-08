<?php

namespace App\Form;

use App\Entity\Stock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class Stock2Type extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name_st')
            ->add('quantity_st')
            ->add('image_st', FileType::class, [
            'label' => 'Image (JPG, PNG or GIF file)',
            'required' => false,
            'data_class' => null, // Set data_class to null for file input
    ])
            
            ->add('buying_price')
            ->add('selling_price')
            ->add('storehouse');
            // Check if 'exclude_date_d_ajout' option is set to exclude the 'date_d_ajout_st' field
            if (!$options['exclude_date_d_ajout']) {
            $builder->add('date_d_ajout_st');
        }
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
            'exclude_date_d_ajout' => false,
        ]);
    }
}