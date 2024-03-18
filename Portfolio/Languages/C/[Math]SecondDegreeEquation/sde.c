//david-7279
#include <stdio.h>
#include <math.h>

// Principal Program
int main() {
    // Variables
    int b, a, c;
    float delta, x1, x2;

    // Values a, b, c
    printf("First value: ");
    scanf("%d", &a);
    printf("Second value: ");
    scanf("%d", &b);
    printf("Third value: ");
    scanf("%d", &c);

    // Show the values and the equation
    printf("\nNumbers: %d, %d, %d \n", a, b, c);
    printf("\nEquation\n \t%dx^2 + %dx + %d = 0 \n", a, b, c);

    // Do the equation
    delta = (b * b) - 4 * a * c; 

    // Show the delta value
    printf("Delta value: %.1f \n", delta);

    // Compare the delta values 
    if (delta < 0)
    printf("\nFor delta negative, there is no root\n");

    else if (delta > 0) {
        x1 = (-b + sqrt(delta) / (2 * a));
        x2 = (-b - sqrt(delta) / (2 * a));

        printf("\nFor delta positive, root is different\n");
        printf("x = %.1f  V  x = %.1f \n", x1, x2);
    }
    else{
        printf("\nFor delta 0, the root is the same\n");
    }
    return 0;
}