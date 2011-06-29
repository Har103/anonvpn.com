<?php

/**
 * sfCountry form base class.
 *
 * @method sfCountry getObject() Returns the current form's model object
 *
 * @package    anonvpn.com
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfCountryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'alpha2'  => new sfWidgetFormInputHidden(),
      'alpha3'  => new sfWidgetFormInputText(),
      'numeric' => new sfWidgetFormInputText(),
      'name'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'alpha2'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('alpha2')), 'empty_value' => $this->getObject()->get('alpha2'), 'required' => false)),
      'alpha3'  => new sfValidatorPass(),
      'numeric' => new sfValidatorInteger(),
      'name'    => new sfValidatorString(array('max_length' => 64)),
    ));

    $this->widgetSchema->setNameFormat('sf_country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfCountry';
  }

}
