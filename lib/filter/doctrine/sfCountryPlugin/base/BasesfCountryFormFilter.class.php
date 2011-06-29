<?php

/**
 * sfCountry filter form base class.
 *
 * @package    anonvpn.com
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfCountryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'alpha3'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numeric' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'alpha3'  => new sfValidatorPass(array('required' => false)),
      'numeric' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfCountry';
  }

  public function getFields()
  {
    return array(
      'alpha2'  => 'Text',
      'alpha3'  => 'Text',
      'numeric' => 'Number',
      'name'    => 'Text',
    );
  }
}
