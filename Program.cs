using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = 10;
            int b = 5;
            int c = 20;

            Console.WriteLine("Arithmetic Operator");
            Console.WriteLine("Add : "+(a+b));
            Console.WriteLine("Sub : "+(a-b));
            Console.WriteLine("Mul : "+(a*b));
            Console.WriteLine("Divi : "+(a/b));

            Console.WriteLine("Comperison Operator");
            Console.WriteLine("Is Equal to : "+(a==b));
            Console.WriteLine("Is Not Equal To : "+(a!=b));
            Console.WriteLine(">= : "+(a>=b));
            Console.WriteLine("<= : "+(a<=b));
            Console.WriteLine("< : " + (a < b));
            Console.WriteLine("> : " + (a > b));

            Console.WriteLine("Assignment Operator");
            Console.WriteLine("+= : " + (a += b));
            Console.WriteLine("-= : " + (a -= b));
            Console.WriteLine("*= : " + (a *= b));
            Console.WriteLine("/= : " + (a /= b));

            Console.WriteLine("Logical Operator");
            Console.WriteLine("And : " + (a>5 && b>10));
            Console.WriteLine("Or : " + (a > 5 || b > 10));
            Console.WriteLine("Not : " + !(a<15));

            Console.WriteLine("Bitwise Operator");
            Console.WriteLine("^ : " + (a ^ b));
            Console.WriteLine("& : " + (a & b));
            Console.WriteLine("| : " + (a | b));
            Console.WriteLine("~0 : " + (~c));

            Console.WriteLine("Array");
            string[] cars = { "BMW", "NishanGTR", "Toyota" };
            Console.WriteLine(cars[1]);

            Console.WriteLine("For Loop"); 
            for (int i=1; i<5; i++)
            { 
            Console.WriteLine(i);
            }

            Console.WriteLine("");
            Console.WriteLine("");
            Console.WriteLine("");
            Console.WriteLine("");



            Console.ReadLine();

        }
    }
}
