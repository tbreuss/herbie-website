---
title: Highlight Plugin
layout: documentation.html
link_to_overview: 1
---

[githubreadme https://raw.githubusercontent.com/getherbie/plugin-highlight/master/README.md]


## Beispiele

### PHP

    [[code php]
    $foo = 45;
    for ( $i = 1; $i < $foo; $i++ )
    {
      echo "$foo<br>";
      --$foo;
    };
    [/code]]

Der obige Code erzeugt die folgende Ausgabe:

[code php]
$foo = 45;
for ( $i = 1; $i < $foo; $i++ )
{
  echo "$foo<br>";
  --$foo;
};
[/code]


### JavaScript

    [[code javascript]
    var i=10;
    for ( i = 1; i < foo; i++ )
    {
      alert i;
    }
    [/code]]

Der obige Code erzeugt die folgende Ausgabe:

[code javascript]
var i=10;
for ( i = 1; i < foo; i++ )
{
  alert i;
}
[/code]


Und hier noch ein paar weitere Beispiele für Syntax Highlighting mit Herbie.


### Microsoft C#

[code c]
// Hallo Welt in Microsoft C#.
using System;

class HelloWorld
{
    public static int Main(String[] args)
    {
        Console.WriteLine("Hallo, Welt!");
        return 0;
    }
}
[/code]


### Python

[code python]
def main():
    print "Hallo Welt!"

if __name__ == '__main__':
    main()
[/code]


### Perl

[code perl]
use Time::HiRes qw(sleep time);
use POSIX qw();
use IO::Handle;

my $delay = shift(@ARGV);

STDOUT->autoflush(1);
{
    my $start = time();
    my $end = $start + $delay;

    my $last_printed;
    while ((my $t = time()) < $end)
    {
        my $new_to_print = POSIX::floor($end - $t);
        if (!defined($last_printed) or $new_to_print != $last_printed)
        {
            $last_printed = $new_to_print;
            print "Remaining $new_to_print/$delay", ' ' x 40, "\r";
        }
        sleep(0.1);
    }
}
print "\n";
[/code]


### Bash

[code bash]
echo -n "Enter the name of an animal: "
read ANIMAL
echo -n "The $ANIMAL has "
case $ANIMAL in
  horse | dog | cat) echo -n "four";;
  man | kangaroo ) echo -n "two";;
  *) echo -n "an unknown number of";;
esac
echo " legs."
[/code]


### TypoScript

[code typoscript]
page.10 = HMENU
page.10.1 = TMENU
page.10.1.NO {
  linkWrap = <B>|</B><BR>
}
[/code]
