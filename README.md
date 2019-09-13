# Swoole Class Dumper

## Description

This tool dumps the structure of all Swoole classes.

## Use

```bash
$ php generate_swoole_classes_structure.php
```

Will generate all classes in `./classes/`. Will create the directory if it doesnt exist.

The class aliases are not dumped. For example "swoole_http_server" or "co", "go" etc...

## Dependencies
- [Azonmedia\Reflection](https://github.com/AzonMedia/reflection/)