<?php
namespace AppBundle\Form;

use Vich\UploaderBundle\Form\Type\VichImageType;

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

        $builder->add('imageFile', VichImageType::class, [
            'required' => true,
            'allow_delete' => true,
            'download_label' => '...',
            'download_uri' => true,
            'image_uri' => true,
            // 'imagine_pattern' => '...',
        ])
        ->add('Save', SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gallery::class,
        ));
    }
}