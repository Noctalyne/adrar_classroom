<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('roles', ChoiceType::class, [
                'choices' => ['Admin' => 'ROLE_ADMIN', 'User' => 'ROLE_USER'],
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('motDePasse', PasswordType::class, [
                'hash_property_path' => 'password',
                'mapped' => false,
            ])
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('image', FileType::class, [
                'data_class' => null,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
