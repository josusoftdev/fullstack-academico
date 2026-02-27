// lib/shared/widgets/molecules/app_setting_row.dart

import 'package:flutter/material.dart';

class AppSettingRow extends StatelessWidget {
  final String title;
  final Widget trailing;

  const AppSettingRow({
    super.key,
    required this.title,
    required this.trailing,
  });

  @override
  Widget build(BuildContext context) {
    return Row(
      mainAxisAlignment: MainAxisAlignment.center,
      children: [
        Text(title),
        trailing,
      ],
    );
  }
}