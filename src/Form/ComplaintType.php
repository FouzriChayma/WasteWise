<?php

namespace App\Form;

use App\Entity\Complaint;
use App\Entity\Reponse;
use App\Entity\User; // Make sure to import the User entity
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $complaint = $builder->getData(); // Get the complaint object from the builder

        // Add fields common to both create and edit
        $builder
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email', // or any other property you'd like to use
            ])
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
            ]);

        // Conditionally add response field only when editing a complaint
        if ($complaint && $complaint->getReponse()) {
            $builder->add('reponse', EntityType::class, [
                'class' => Reponse::class,
                'choice_label' => 'name', // Change 'name' to the appropriate property of the Response entity
                'required' => false, // Change to true if the response is required
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Complaint::class,
        ]);
    }
}
