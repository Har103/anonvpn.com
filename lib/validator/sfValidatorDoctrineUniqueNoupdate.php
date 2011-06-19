<?php
/**
 * If you would try to check existence of primary key
 * with sfValidatorDoctrineUnique it will think that
 * we're updaing an object and will be always valid.
 *
 * This object forces all objects be "new".
 *
 */

class sfValidatorDoctrineUniqueNoupdate extends sfValidatorDoctrineUnique
{
  protected function isUpdate(Doctrine_Record $object, $values)
  {
    return false;
  }
}