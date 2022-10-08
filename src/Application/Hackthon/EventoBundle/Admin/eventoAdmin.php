<?php
namespace App\Application\Hackthon\EventoBundle\Admin;


use App\Application\Hackthon\EventoBundle\Entity\evento;

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

class eventoAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof evento
            ? $object->getStringId()
            : ''; // shown in the breadcrumb on the create view
    }

    public function getExportFields()
    {
        return array('Id' => 'id', 'Rua' => 'rua', 'Cidade' => 'cidade', 'Estado' => 'estado', 'Numero' => 'numero', 'Complemento' => 'complemento', 'Telefone' => 'telefone', 'Email' => 'email', 'Nome' => 'nome', );
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        //$collection->remove('create');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            
            ->add('rua', null, [
                'label' => 'Rua',
            ])
            ->add('cidade', null, [
                'label' => 'Cidade',
            ])
            ->add('estado', null, [
                'label' => 'Estado',
            ])
            ->add('numero', null, [
                'label' => 'Numero',
            ])
            ->add('complemento', null, [
                'label' => 'Complemento',
            ])
            ->add('telefone', null, [
                'label' => 'Telefone',
            ])
            ->add('email', null, [
                'label' => 'Email',
            ])
            ->add('nome', null, [
                'label' => 'Nome',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        unset($this->listModes['mosaic']);

        $listMapper
            //->addIdentifier('id')
            
            ->addIdentifier('logo', null, [
                'template' => '@SonataMedia/MediaAdmin/list_image.html.twig',
                'label' => 'Logo',
            ])
            ->addIdentifier('rua', null, [
                'label' => 'Rua',
                
                
            ])
            ->addIdentifier('cidade', null, [
                'label' => 'Cidade',
                
                
            ])
            ->addIdentifier('estado', null, [
                'label' => 'Estado',
                
                
            ])
            ->addIdentifier('numero', null, [
                'label' => 'Numero',
                
                
            ])
            ->addIdentifier('complemento', null, [
                'label' => 'Complemento',
                
                
            ])
            ->addIdentifier('telefone', null, [
                'label' => 'Telefone',
                
                
            ])
            ->addIdentifier('email', null, [
                'label' => 'Email',
                
                
            ])
            ->addIdentifier('nome', null, [
                'label' => 'Nome',
                
                
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
            
            ->add('logo', ModelListType::class,[
                    'label' => 'Logo: ',
                ],[
                    'link_parameters' => [
                            //'context' => 'default',
                            // 'hide_context' => true,
                    ],
            ])
            ->add('rua', TextType::class, [
                'label' => 'Rua:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('cidade', TextType::class, [
                'label' => 'Cidade:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('estado', TextType::class, [
                'label' => 'Estado:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('numero', TextType::class, [
                'label' => 'Numero:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('complemento', TextType::class, [
                'label' => 'Complemento:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('telefone', TextType::class, [
                'label' => 'Telefone:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('email', TextType::class, [
                'label' => 'Email:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('nome', TextType::class, [
                'label' => 'Nome:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
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
            
            ->add('logo', null, [
                'label' => 'Logo:',
                'template' => '@ApplicationSonataMedia/image_show_field.html.twig',
            ])
            ->add('rua', null, [
                'label' => 'Rua:',
                
            ])
            ->add('cidade', null, [
                'label' => 'Cidade:',
                
            ])
            ->add('estado', null, [
                'label' => 'Estado:',
                
            ])
            ->add('numero', null, [
                'label' => 'Numero:',
                
            ])
            ->add('complemento', null, [
                'label' => 'Complemento:',
                
            ])
            ->add('telefone', null, [
                'label' => 'Telefone:',
                
            ])
            ->add('email', null, [
                'label' => 'Email:',
                
            ])
            ->add('nome', null, [
                'label' => 'Nome:',
                
            ])
        ;
    }
    
}

