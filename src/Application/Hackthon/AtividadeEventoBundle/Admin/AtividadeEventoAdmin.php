<?php
namespace App\Application\Hackthon\AtividadeEventoBundle\Admin;


use App\Application\Hackthon\DiaEventoBundle\Entity\DiaEvento;
use App\Application\Hackthon\PalestranteBundle\Entity\Palestrante;
use App\Application\Hackthon\AtividadeEventoBundle\Entity\AtividadeEvento;

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

class AtividadeEventoAdmin extends AbstractAdmin
{
    public function toString($object)
    {
        return $object instanceof AtividadeEvento
            ? $object->getStringId()
            : ''; // shown in the breadcrumb on the create view
    }

    public function getExportFields()
    {
        return array('Id' => 'id', 'Horario' => 'horario', 'Atividade' => 'atividade', 'Descricao' => 'descricao', 'DiaEvento' => 'diaEvento.dia', 'Palestrante' => 'palestrante.nome', );
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        //$collection->remove('create');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            
            ->add('horario', null, [
                'label' => 'Horario',
            ])
            ->add('atividade', null, [
                'label' => 'Atividade',
            ])
            ->add('descricao', null, [
                'label' => 'Descricao',
            ])
            ->add('diaEvento', null, [], EntityType::class,[
                'class' => DiaEvento::class,
                'label' => 'DiaEvento',
                'multiple' => true,
                'choice_label' => function ($diaEvento) {
                    return $diaEvento->getDia();
                },
            ])
            ->add('palestrante', null, [], EntityType::class,[
                'class' => Palestrante::class,
                'label' => 'Palestrante',
                'multiple' => true,
                'choice_label' => function ($palestrante) {
                    return $palestrante->getNome();
                },
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        unset($this->listModes['mosaic']);

        $listMapper
            //->addIdentifier('id')
            
            ->addIdentifier('horario', null, [
                'label' => 'Horario',
                'format' => 'd/m/Y h:i:s',
                
            ])
            ->addIdentifier('atividade', null, [
                'label' => 'Atividade',
                
                
            ])
            ->addIdentifier('descricao', null, [
                'label' => 'Descricao',
                
                
            ])
            ->add('diaEvento', null, [
                'label' => 'DiaEvento',
                'associated_property' => 'dia',
            ])
            ->add('palestrante', null, [
                'label' => 'Palestrante',
                'associated_property' => 'nome',
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
            
            ->add('horario', DateTimeType::class, [
                'label' => 'Horario:',
                'required' => true,
                'widget' => 'single_text',
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('atividade', TextType::class, [
                'label' => 'Atividade:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('descricao', TextType::class, [
                'label' => 'Descricao:',
                'required' => true,
                
                'constraints' => [ 
                    new NotNull(),
             ],
                'help' => '',
            ])
            ->add('diaEvento', ModelType::class,[
                'class' => DiaEvento::class,
                'property' => 'dia',
                'label' => 'DiaEvento:',
                'required' => false,
                
                'expanded' => false,
                'help' => '',
            ])
            ->add('palestrante', ModelType::class,[
                'class' => Palestrante::class,
                'property' => 'nome',
                'label' => 'Palestrante:',
                'required' => false,
                
                'expanded' => false,
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
            
            ->add('horario', null, [
                'label' => 'Horario:',
                'format' => 'd/m/Y h:i:s',
            ])
            ->add('atividade', null, [
                'label' => 'Atividade:',
                
            ])
            ->add('descricao', null, [
                'label' => 'Descricao:',
                
            ])
            ->add('diaEvento.dia', null, [
                'label' => 'DiaEvento:',
            ])
            ->add('palestrante.nome', null, [
                'label' => 'Palestrante:',
            ])
        ;
    }
    
}

