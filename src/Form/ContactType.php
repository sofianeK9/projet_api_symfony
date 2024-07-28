<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre nom.']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Votre nom doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre adresse email.']),
                    new Email(['message' => 'Veuillez entrer une adresse email valide.']),
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un sujet.']),
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre message.']),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Votre message doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'contact_item',
        ]);
    }
}
