# Config translation example

This module provides an example of how to create a configuration form in a custom module and make it translatable out-of-the-box. 

## How to

Enable to module with ```drush en config_translation_example```. Head to ```/en/admin/config``` . Under the ```System``` tab you will see a title "Configuration translation example settings". 

Save the textfield at ```/admin/config/config-translation-example/adminsettings```. You will notice a 'translate'-tab on top of the file. You'll be able to translate the textfield to your other languages.

## Common misunderstandings

Unlike default behavior of configuration, making it translatable is a bit tricky. All of the following files need to be available and naming should be correct:

1. *.config_translation.yml
2. *.routing   
3. config/schema/*.schema.yml 
4. config/install/*.yml


