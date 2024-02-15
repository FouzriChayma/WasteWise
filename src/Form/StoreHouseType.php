<?php

namespace App\Form;

use App\Entity\StoreHouse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StoreHouseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameSh')
            ->add('locationSh')
            ->add('capacitySh')
            ->add('dateCreatedSh')
            ->add('statusSh')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StoreHouse::class,
        ]);
    }
}
