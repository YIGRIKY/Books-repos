<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Books;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Название'
            ))
            ->add('year', IntegerType::class, array(
                'label' => 'Год написания'
            ))
            ->add('author', EntityType::class, array(
                    'label' => 'Авторы',
                    'class' => Author::class
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Краткое описание'
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
