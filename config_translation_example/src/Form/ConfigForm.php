<?php
/**
 * @file
 * Contains Drupal\config_translation_example\Form\ConfigForm.
 */
namespace Drupal\config_translation_example\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'config_translation_example.adminsettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'config_translation_example_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('config_translation_example.adminsettings');

    // Example content
    $form['example_content'] = [
      '#type' => 'details',
      '#title' => $this->t('Example content'),
    ];
    $form['example_content']['example'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Content'),
      '#description' => $this->t('Enter your text right here.'),
      '#default_value' => $config->get('example'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('config_translation_example.adminsettings')
      ->set('example', $form_state->getValue('example'))
      ->save();
  }
}
