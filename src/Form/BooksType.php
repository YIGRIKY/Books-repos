<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Books;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('year', DateType::class, array(
                'label' => 'year',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('description')
            ->add('shortPlot')
            ->add('author' ,EntityType::class, array(
                    'label' => 'author',
                    'class' => Author::class,
                    'choice_label' => 'author_name'
                ))
            ->add('category' ,EntityType::class, array(
                'mapped' => false,
                'label' => 'Жанр',
                'class' => Category::class,
                'choice_label' => 'category_name'
            ))
            ->add('image')
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
