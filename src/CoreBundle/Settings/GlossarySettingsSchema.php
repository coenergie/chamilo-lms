<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Settings;

use Chamilo\CoreBundle\Form\Type\YesNoType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sylius\Bundle\SettingsBundle\Schema\SettingsBuilderInterface;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class GlossarySettingsSchema
 * @package Chamilo\CoreBundle\Settings
 */
class GlossarySettingsSchema extends AbstractSettingsSchema
{
    /**
     * {@inheritdoc}
     */
    public function buildSettings(SettingsBuilderInterface $builder)
    {
        $builder
            ->setDefaults(
                [
                    'show_glossary_in_extra_tools' => '',
                ]
            );

        $allowedTypes = [
            'show_glossary_in_extra_tools' => ['string'],
        ];
        $this->setMultipleAllowedTypes($allowedTypes, $builder);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder)
    {
        $builder
            ->add(
                'show_glossary_in_extra_tools',
                ChoiceType::class,
                [
                    'choices' => [
                        'None' => 'none',
                        'Exercise' => 'exercise',
                        'LearningPath' => 'lp',
                        'ExerciseAndLearningPath' => 'exercise_and_lp'
                    ]
                ]
            )
        ;
    }
}
