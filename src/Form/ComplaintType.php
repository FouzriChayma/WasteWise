<?php

namespace App\Form;

use App\Entity\Complaint;
use App\Entity\Reponse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user_id')
            ->add('title')
            ->add('description')
            ->add('location')
            ->add('submissionDate')
            ->add('picture')
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'Pending' => 'Pending',
                    'In Progress' => 'In progress',
                    'Resolved' => 'Resolved',
                ],
                'data' => 'pending', // Default value
            ])            ->add('reponse', EntityType::class, [
                'class' => Reponse::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Complaint::class,
        ]);
    }
}
