#include <stdio.h>
#include <math.h>

int add(int smaller, int larger) 
{
  int solution = (smaller + larger);
  return solution;
}

int sub(int smaller, int larger) 
{
  int solution = (smaller - larger);
  return solution;
}

int mult(int smaller, int larger) 
{
  int solution = (smaller * larger);
  return solution;
}

float div(int smaller, float larger)     //we need the second to be float for it to work
{
  float solution = (smaller / larger);
  return solution;
}




//
// Simple program which requires two integer inputs on the command line 
//
int main(int argc, char* argv[])
{
  // first check to see if two args (3 including program name) were entered 
  if (argc != 3)
  {
    printf("%s : expected 2 args, please enter two integers\n", argv[0]);
    return 1;
  }

  // at this point we know we have two args, let's check that they are ints
 int smaller;
  // ssscanf scans a string for a format - in this case an integer (%f) and returns
  // the number of items found
  int found = sscanf(argv[1], "%d", &smaller);
  if (found != 1)
  {
    printf("first arg is not an integer, enter two ints\n");
    return 1;
  }

  int larger;
  found = sscanf(argv[2], "%d", &larger);
  if (found != 1)
  {
    printf("second arg is not an integer, enter two ints\n");
    return 1;
  }


int addition = add(smaller, larger);
printf("%d + %d is equal to %d\n", smaller, larger, addition);

int subtraction = sub(smaller, larger);
printf("%d - %d is equal to %d\n", smaller, larger, subtraction);

int multiplication = mult(smaller, larger);
printf("%d x %d is equal to %d\n", smaller, larger, multiplication);

float division = div(smaller, larger);
printf("%d / %d is equal to %f\n", smaller, larger, division);

}
  
