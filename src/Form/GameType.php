<?php

namespace App\Form;

use App\Entity\Game;
use App\Entity\Category;
use App\Entity\Developer;
use App\Entity\Editor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date')
            ->add('description')
            ->add('photo')
            ->add('editor')
            ->add('developer')

            ->add('category', ChoiceType::class, [
                'choices'=> $options['categories'],
                'choice_label'=>function(?Category $category) {
                    return $category ? $category->getName() : '';
                },
            ])

            ->add('editor', ChoiceType::class, [
                'choices'=> $options['editors'],
                'choice_label'=>function(?Editor $editor) {
                    return $editor ? $editor->getName() : '';
                },
            ])

            ->add('developer', ChoiceType::class, [
                'choices'=> $options['developers'],
                'choice_label'=>function(?Developer $developer) {
                    return $developer ? $developer->getName() : '';
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
            'categories' => [],
            'editors' => [],
            'developers' => [],
        ]);
    }
}
