"""Functions used in preparing Guido's gorgeous lasagna.

Learn about Guido, the creator of the Python language:
https://en.wikipedia.org/wiki/Guido_van_Rossum

This is a module docstring, used to describe the functionality
of a module and its functions and/or classes.
"""

EXPECTED_BAKE_TIME = 40

def bake_time_remaining(elapsed_bake_time):
    """Calculate the bake time remaining.

    Parameters:
        elapsed_bake_time (int): The baking time already elapsed.

    Returns:
        int: The remaining bake time (in minutes) derived from 'EXPECTED_BAKE_TIME'.

    Function that takes the actual minutes the lasagna has been in the oven as
    an argument and returns how many minutes the lasagna still needs to bake
    based on the `EXPECTED_BAKE_TIME`.
    """
    return EXPECTED_BAKE_TIME - elapsed_bake_time
    
def preparation_time_in_minutes(number_of_layers):
    """ Calculate the preparation time in minutes.
    Parameters: 
        number_of_layers (int): The numbers of layers you want in your Lasagna.
    Returns:
        int: How many minutes you need to prepare your Lasagna, assuming each layer          takes 2 minutes to prepare.
    Function that takes the number of layers the lasagna will have and the minutes       it takes each layer to bake. 
    """
    return number_of_layers * 2
    
def elapsed_time_in_minutes(number_of_layers, elapsed_bake_time):
    """Calculate the elapsed time in minutes.
    Parameters: 
        number_of_layers (int): The number of layers you want in your Lasagna.
        elapsed_bake_time (int): The baking time already elapsed.
    Returns:
        int: The elapsed time in minutes obtein from the total time of the elapsed           bake time and the total of preparation time.
    Function that takes the number of layers, obtain the time that need each layer       to prepare and add the time that takes the bake.
    """
    return elapsed_bake_time + (number_of_layers * 2)

