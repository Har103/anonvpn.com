<?php

/**
 * blog actions.
 *
 * @package    anonvpn.com
 * @subpackage blog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class blogActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->blogposts = Doctrine_Core::getTable('Blogpost')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BlogpostForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BlogpostForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($blogpost = Doctrine_Core::getTable('Blogpost')->find(array($request->getParameter('id'))), sprintf('Object blogpost does not exist (%s).', $request->getParameter('id')));
    $this->form = new BlogpostForm($blogpost);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($blogpost = Doctrine_Core::getTable('Blogpost')->find(array($request->getParameter('id'))), sprintf('Object blogpost does not exist (%s).', $request->getParameter('id')));
    $this->form = new BlogpostForm($blogpost);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($blogpost = Doctrine_Core::getTable('Blogpost')->find(array($request->getParameter('id'))), sprintf('Object blogpost does not exist (%s).', $request->getParameter('id')));
    $blogpost->delete();

    $this->redirect('blog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $blogpost = $form->save();

      $this->redirect('blog/edit?id='.$blogpost->getId());
    }
  }
}
