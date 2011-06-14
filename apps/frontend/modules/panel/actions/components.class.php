<?php

class panelComponents extends sfComponent
{
  public function execute($request) {}

  public function executeDashboard()
  {
    $this->form = new sfForm();
  }
}