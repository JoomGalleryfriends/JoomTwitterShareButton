<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-2.0/Plugins/JoomTwitterShareButton/trunk/joomtwittersharebutton.php $
// $Id: joomfacebooklikebutton.php 2270 2010-08-19 15:59:46Z chraneco $
/******************************************************************************\
**   JoomGallery Plugin 'JoomTwitterShareButton' 1.0 BETA                     **
**   By: JoomGallery::ProjectTeam                                             **
**   Copyright (C) 2012  Chraneco                                             **
**   Released under GNU GPL Public License                                    **
**   License: http://www.gnu.org/copyleft/gpl.html                            **
\******************************************************************************/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

/**
 * JoomGallery Plugin 'JoomTwitterShareButton'
 *
 * @package     Joomla
 * @subpackage  JoomGallery
 * @since       1.0
 */
class plgJoomGalleryJoomTwitterShareButton extends JPlugin
{
  /**
   * Constructor
   *
   * For php4 compatability we must not use the __constructor as a constructor for plugins
   * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
   * This causes problems with cross-referencing necessary for the observer design pattern.
   *
   * @access  protected
   * @param   object    $subject  The object to observe
   * @param   object    $params   The object that holds the plugin parameters
   * @return  void
   * @since   1.0
   */
  function plgJoomGalleryJoomTwitterShareButton(&$subject, $params)
  {
    parent::__construct($subject, $params);
  }

  /**
   * onJoomDisplayIcons method
   *
   * Method is called by the view when icons should be displayed
   *
   * @access  public
   * @param   object  $image  Holds the image information
   * @return  void
   * @since   1.0
   */
  function onJoomDisplayIcons($context, $image)
  {
    $html = '';

    if($context == 'detail.image')
    {
      /*$app    = JFactory::getApplication('site');
      $doc    = JFactory::getDocument();
      $uri    = JURI::getInstance();
      $ambit  = JoomAmbit::getInstance();

      $doc->setMetaData('og:title', $image->imgtitle);
      $doc->setMetaData('og:type', 'article');
      $doc->setMetaData('og:url', $uri->toString());
      $doc->setMetaData('og:image', $ambit->getImg('thumb_url', $image));
      $doc->setMetaData('og:site_name', $app->getCfg('sitename'));
      if($image->imgtext)
      {
        $doc->setMetaData('og:description', $image->imgtext);
      }*/

      $html .= '<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
    }

    return $html;
  }
}