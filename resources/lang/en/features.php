<?php

return [
   'one_is_required'           => '(at less one image is required)',
   'default_values'            => 'default values',
   'defaults_method_not_exist' => 'The method that you indicated does not exist in the helper',
   'defaults_required'         => 'The defaults are required',
   'help_message'              => 'Help message',
   'help_messages'             => 'Help messages',
   'helper_method'             => 'Specify the name of the helper method (this method should be previously programmed)',
   'max_num_values'            => 'Maximum number of values',
   'maximum_number'            => 'For safety reasons the maximum number of allowed values is:',
   'msg_help_max_num_values'   => 'Specify the possible amount of times you can repeat this feature in one product.',
   'msg_help_type_input'       => 'This will be the input to be displayed in the form of products',
   'msg_help_type_product'     => 'Specify the types of products that have this feature',
   'new_feature'               => 'New Features',
   'number_characters'         => 'Number of characters',
   'numerical_validation'      => 'Numerical validation',
   'product_features'          => 'Product Features',
   'insert_message'            => 'Feature saved successfully.',
   'update_message'            => 'Feature updated successfully.',
   'new_product_feature'       => 'New Product Feature',
   'select_condition'          => 'Select the condition',
   'separate_with_bar'         => 'Please separate them with bar "|"',
   'separate_with_commas'      => 'Please separate them with commas',
   'type_data'                 => 'Data type',
   'input_type'                => 'Type of Input', //used
   'type_message'              => 'Type of message',
   'product_type'              => 'Type of Product', //used
   'use_bar'                   => 'Use bar "|" to determine the number of values',
   'validation'                => 'Validation',
   'view_product_detail'       => 'View Product Detail',
   'view_product_form'         => 'View Product Form',
   //'only_numerical_values'     => 'only numerical values',
   'is_invalid'                                  => 'is invalid',
   'is_required'                                 => 'is required',
   'validation_rules_numerical_validation_array' => [
      ''              => '',
      'maximum_value' => 'Maximum value',
      'minimum_value' => 'Minimum value',
      'range_values'  => 'Range of values',
   ],
   'validation_rules_number_characters_array' => [
      ''                   => '',
      'maximum_characters' => 'Maximum characters',
      'minimum_characters' => 'Minimum characters',
      'character_range'    => 'Character range',
   ],
   'validation_rules_type_data_array' => [
      ''             => '',
      'alphanumeric' => 'Alphanumeric',
      'letters'      => 'letters',
      'numeric'      => 'numeric',
      // 'personalized_value' => 'Personalized according to the value',
   ],
   'validation_rules_array' => [
      ''                => '',
      'all_required'    => 'All required',
      'one_required'    => 'At least one required',
      'required_number' => 'Required number of securities',
   ],
   'validation_rules__msg_help_array' => [
      'msg_help_all_required'       => 'All values of this feature are required',
      'msg_help_alphanumeric'       => 'All values are alphanumeric',
      'msg_help_character_range'    => 'Specify the range of characters',
      'msg_help_letters'            => 'All values are only letters',
      'msg_help_maximum_characters' => 'Specify the maximum number of characters',
      'msg_help_maximum_value'      => 'Specify the maximum number accepted',
      'msg_help_minimum_characters' => 'Specify the minimum number of carecteres',
      'msg_help_minimum_value'      => 'Specify the minimum number accepted',
      'msg_help_numeric'            => 'All numerical values are only',
      'msg_help_one_required'       => 'At least one value of this feature is required',
      'msg_help_personalized_value' => 'Specify that value has that type of data',
      'msg_help_range_values'       => 'Specify the range of possible values',
      'msg_help_required_number'    => 'It required a value if the next value is specified',
   ],
   'default_values_array' => [
      ''                     => '',
      'general'              => 'General',
      'specific_data'        => 'By specific data',
      'custom_General'       => 'Custom General',
      'custom_specific_data' => 'Custom for specific data',
   ],
   'default_values_msg_help_array' => [
      'msg_help_checkbox_data'        => 'Separate them with bar "|", or specify the name of the helper method, the method must be preprogrammed',
      // 'msg_help_checkbox_data'        => 'Separate them with commas, or specify the name of the helper method, the method must be preprogrammed',
      'msg_help_custom_General'       => 'Values to be selected with special behavior or defined in the code',
      'msg_help_custom_specific_data' => 'Values to be selected with special behavior or defined in the code for each data (minimum number of values = 2)',
      'msg_help_general'              => 'Values to select',
      'msg_help_specific_data'        => 'To select values for each data (minimum number of values = 2)',
      'msg_help_repeat_values'        => 'Default data for value No.',
   ],
   'help_messages_array' => [
      ''                   => '',
      'general'            => 'General',
      'specific'           => 'Specific',
      'general_selection'  => 'General selection',
      'specific_selection' => 'Specific selection',
   ],
   'help_messages_msg_help_array' => [
      'msg_help_general'             => 'A unique message for the attribute',
      'msg_help_general_selection'   => 'Enter a group of messages separated by bars "|", which will be the options the user can choose for this attribute.',
      'msg_help_help_messages'       => 'Help messages can complete the information representing the attribute data (eg for weight attribute the help message can be, grams, kilograms, pounds, ounces).',
      'msg_help_specific'            => 'A message for each of the attribute values',
      'msg_help_specific_selection'  => 'Log groups of  messages  separated by bars "|", which will be the options the user can choose for each of the attribute values.',
      'msg_help_type_message'        => 'It represents the different ways to view help messages, in the form of product and the other views.',
      'msg_help_repeat_values'       => 'Message to the value No.',
   ],
   'validation_messages' => [
      'status.in'                        => 'Invalid status',
      'name.required'                    => 'The name is required',
      'input_type.required'              => 'Input type is required',
      'type_products.required'           => 'Type products is required',
      'default.required_if'              => 'The Default field is required if the input type is Select',
      'default2.required_if'             => 'The Default field is required if the input type is Select',
      'condition.in'                     => 'The default condition is invalid',
      'type_data.in'                     => 'The data type is invalid',
      'numerical_validation.in'          => 'The condition of numerical validation is invalid',
      'number_characters.in'             => 'The condition of character validation number is invalid',
      'start_value_number.numeric'       => 'The accepted value must be a numeric',
      'end_value_number.required_if'     => 'The maximum number accepted is required',
      'end_value_number.numeric'         => 'The maximum number accepted must be a number',
      'start_value_characters.numeric'   => 'The number of characters must be numeric',
      'end_value_characters.required_if' => 'The maximum number of characters required',
      'end_value_characters.numeric'     => 'The maximum number of characters must be a number',
      'type_message.in'                  => 'Type message is invalid',
   ],
];
