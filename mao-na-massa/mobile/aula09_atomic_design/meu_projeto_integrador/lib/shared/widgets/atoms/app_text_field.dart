// lib/shared/widgets/atoms/app_text_field.dart

import 'package:flutter/material.dart';

class AppTextField extends StatelessWidget {
  final TextEditingController controller;
  final String labelText;
  final VoidCallback onSave;
  final Function(String)? onSubmitted;

  const AppTextField({
    super.key,
    required this.controller,
    required this.labelText,
    required this.onSave,
    this.onSubmitted,
  });

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.symmetric(horizontal: 40.0),
      child: TextField(
        controller: controller,
        decoration: InputDecoration(
          labelText: labelText,
          border: const OutlineInputBorder(),
          suffixIcon: IconButton(
            icon: const Icon(Icons.save),
            onPressed: onSave,
          ),
        ),
        onSubmitted: onSubmitted,
      ),
    );
  }
}