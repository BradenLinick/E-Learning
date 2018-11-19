import swal from 'sweetalert';

class Solution {
    constructor(exerciseSolution) {
        this.exerciseSolution = exerciseSolution;
    }

    checkUserSolution(userSolution){
        if(this.trimSpaces(this.exerciseSolution.toLowerCase()) === this.trimSpaces(userSolution.toLowerCase())) {
            swal({
                position: 'top-end',
                icon: 'success',
                title: 'You solved the exercise',
                button: 'next'            
              });
        }
    }

    trimSpaces(str) {
        return str.replace(/\s+/g, '');
    }


}

//REMEMBER TO STOP THE TIMER WHEN A USER SOLVES A LESSON