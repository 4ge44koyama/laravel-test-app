<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . "/app",
        __DIR__ . "/config",
        __DIR__ . "/database",
        __DIR__ . "/routes",
        __DIR__ . "/tests",
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(false) // ToDo:リプレイス後は項目を限定して許可できるようにtrueにしたい
    ->setRules([
        '@PSR2' => true, // ToDo:バージョンアップ後は@PSR12に変更する
        '@PhpCsFixer:risky' => false, // trueにするとriskyルールを全て許可してしまうためfalseにしておいて、リプレイス時は各項目ごとに個別指定する
        'array_syntax' => ['syntax' => 'short'],
        'array_indentation' => true,
        'binary_operator_spaces' => [
            'operators' => [
                '=' => 'single_space',
                '=>' => 'single_space',
                '<' => 'single_space',
                '>' => 'single_space',
                '==' => 'single_space',
                '===' => 'single_space',
                '!=' => 'single_space',
                '!==' => 'single_space',
                '<=' => 'single_space',
                '>=' => 'single_space',
                '+' => 'single_space',
                '-' => 'single_space',
                '*' => 'single_space',
                '/' => 'single_space',
                '??' => 'single_space',
                '||' => 'single_space',
                '&&' => 'single_space',
            ],
        ],
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'braces_position' => [
            'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'anonymous_classes_opening_brace' => 'same_line',
            'control_structures_opening_brace' => 'same_line',
            'anonymous_functions_opening_brace' => 'same_line',
        ],
        'control_structure_braces' => true,
        'control_structure_continuation_position' => ['position' => 'same_line'],
        'statement_indentation' => true,
        'no_multiple_statements_per_line' => true,
        'cast_spaces' => [
            'space' => 'single',
        ],
        'compact_nullable_type_declaration' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'date_time_immutable' => false,
        'declare_parentheses' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_class' => false,
        'final_public_method_for_abstract_class' => false,
        'function_declaration' => [
            'closure_function_spacing' => 'one',
        ],
        'type_declaration_spaces' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'indentation_type' => true,
        'is_null' => false,
        'line_ending' => true,
        'lowercase_cast' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'mb_str_functions' => false,
        'method_chaining_indentation' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'throw',
                'use',
            ],
        ],
        'class_attributes_separation' => [
            'elements' => [
                'trait_import' => 'none',
            ],
        ],
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => [
            'positions' => ['inside', 'outside'],
        ],
        'no_superfluous_phpdoc_tags' => false,
        'no_trailing_comma_in_singleline' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unneeded_braces' => true,
        'no_unneeded_final_method' => false,
        'no_unused_imports' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
        ],
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'phpdoc_indent' => true,
        'phpdoc_order' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'php_unit_test_case_static_method_calls' => false,
        'return_type_declaration' => ['space_before' => 'none'],
        'short_scalar_cast' => true,
        'simplified_if_return' => true,
        'simplified_null_return' => true,
        'blank_lines_before_namespace' => ['min_line_breaks' => 1, 'max_line_breaks' => 1],
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => [
            'elements' => ['arrays'],
        ],
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        ])
    ->setFinder($finder);
