<?php
namespace AppBundle\Form;


use AppBundle\Entity\Gallery;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GalleryUpload extends AbstractType
{
	/**
	* (@inheritdoc)
	*/
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // ...

        $builder->add('imageName', FileType::class, array('label' => 'Gallery Photo'))
        ->add('Save', SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gallery::class,
        ));
    }
}