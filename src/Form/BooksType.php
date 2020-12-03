<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Books;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Title')
            ->add('year')
            ->add('description')
            ->add('author' ,EntityType::class, array(
                    'label' => 'Сохранить',
                    'class' => Author::class,
                    'choice_label' => 'author_name'
                ))
            ->add('save', SubmitType::class, array(
                'label' => 'Сохранить'

            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
        ]);
    }
}
