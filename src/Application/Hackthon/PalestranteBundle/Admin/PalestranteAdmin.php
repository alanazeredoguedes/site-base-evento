<?php
namespace App\Application\Hackthon\PalestranteBundle\Admin;


use App\Application\Hackthon\PalestranteBundle\Entity\Palestrante;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Sonata\AdminBundle\Route\RouteCollection;

//Types Symfony Form Types
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\WeekType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;

class PalestranteAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof Palestrante
            ? $object->getStringId()
            : ''; // shown in the breadcrumb on the create view
    }

    public function getExportFields()
    {
        return array('Id' => 'id', 'Nome' => 'nome', 'Descricao' => 'descricao', 'Instragram' => 'instragram', 'Linkedin' => 'linkedin', 'Email' => 'email', 'Twitter' => 'twitter', );
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        //$collection->remove('create');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            
            ->add('nome', null, [
                'label' => 'Nome',
            ])
            ->add('descricao', null, [
                'label' => 'Descricao',
            ])
            ->add('instragram', null, [
                'label' => 'Instragram',
            ])
            ->add('linkedin', null, [
                'label' => 'Linkedin',
            ])
            ->add('email', null, [
                'label' => 'Email',
            ])
            ->add('twitter', null, [
                'label' => 'Twitter',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        unset($this->listModes['mosaic']);

        $listMapper
            //->addIdentifier('id')
            
            ->addIdentifier('foto', null, [
                'template' => '@SonataMedia/MediaAdmin/list_image.html.twig',
                'label' => 'Foto',
            ])
            ->addIdentifier('nome', null, [
                'label' => 'Nome',
                
                
            ])
            ->addIdentifier('descricao', null, [
                'label' => 'Descricao',
                
                
            ])
            ->addIdentifier('instragram', null, [
                'label' => 'Instragram',
                
                
            ])
            ->addIdentifier('linkedin', null, [
                'label' => 'Linkedin',
                
                
            ])
            ->addIdentifier('email', null, [
                'label' => 'Email',
                
                
            ])
            ->addIdentifier('twitter', null, [
                'label' => 'Twitter',
                
                
            ])          
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }
    
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            
            ->add('foto', ModelListType::class,[
                    'label' => 'Foto: ',
                ],[
                    'link_parameters' => [
                            //'context' => 'default',
                            // 'hide_context' => true,
                    ],
            ])
            ->add('nome', TextType::class, [
                'label' => 'Nome:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('descricao', TextType::class, [
                'label' => 'Descricao:',
                'required' => false,

                'help' => '',
            ])
            ->add('instragram', UrlType::class, [
                'label' => 'Instragram:',
                'required' => false,

                'help' => '',
            ])
            ->add('linkedin', UrlType::class, [
                'label' => 'Linkedin:',
                'required' => false,

                'help' => '',
            ])
            ->add('email', UrlType::class, [
                'label' => 'Email:',
                'required' => false,
                'help' => '',
            ])
            ->add('twitter', UrlType::class, [
                'label' => 'Twitter:',
                'required' => false,

                'help' => '',
            ])
        ;
    }
    
    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id', null, [
                'label' => 'Id:',
            ])
            
            ->add('foto', null, [
                'label' => 'Foto:',
                'template' => '@ApplicationSonataMedia/image_show_field.html.twig',
            ])
            ->add('nome', null, [
                'label' => 'Nome:',
                
            ])
            ->add('descricao', null, [
                'label' => 'Descricao:',
                
            ])
            ->add('instragram', null, [
                'label' => 'Instragram:',
                
            ])
            ->add('linkedin', null, [
                'label' => 'Linkedin:',
                
            ])
            ->add('email', null, [
                'label' => 'Email:',
                
            ])
            ->add('twitter', null, [
                'label' => 'Twitter:',
                
            ])
        ;
    }
    
}

