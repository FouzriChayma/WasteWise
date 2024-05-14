<?php

namespace App\Form;

use App\Entity\Complaint;
use App\Entity\Reponse;
use App\Entity\Response; // Make sure to import the Response entity
use Symfony\Bridge\Doctrine\Form\Type\EntityType as TypeEntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
class ComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $complaint = $builder->getData(); // Get the complaint object from the builder

        // Add fields common to both create and edit
        $builder
            ->add('title', ChoiceType::class, [
                'choices'  => [
                    'Organic' => 'Organic',
                    'Glass' => 'Glass',
                    'Plastic' => 'Plastic',
                    'Metal' => 'Metal',
                    'Paper' => 'Paper',
                    'Other' => 'Other'
                ]])

            ->add('description')
            ->add('location')
            ->add('submissionDate')
            ->add('picture', FileType::class, [
                'label' => 'Upload Picture',
                'required' => false,
                'mapped' => false, // Do not map directly to the entity field
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file',
                    ])
                ],
            ]);
         

        // Conditionally add response field only when editing a complaint
        if ($complaint && $complaint->getReponse()) {
            $builder->add('reponse', TypeEntityType::class, [
                'class' => Reponse::class,
                'choice_label' => 'message', // Change 'name' to the appropriate property of the Response entity
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
