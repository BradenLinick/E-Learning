import swal from 'sweetalert';
import {stopTimer} from './timer';
import {startTimer} from './timer';

export default class Solution {
    constructor(exerciseSolution) {
        this.exerciseSolution = exerciseSolution;
        startTimer();
        stopTimer();
    }

    checkUserSolution(userSolution){
        console.log(this.trimSpaces(this.exerciseSolution.toLowerCase()));
        console.log(this.trimSpaces(userSolution.toLowerCase()));
        if(this.trimSpaces(this.exerciseSolution.toLowerCase()) === this.trimSpaces(userSolution.toLowerCase())) {
            swal({
                position: 'top-end',
                icon: 'success',
                title: 'You solved the exercise',
                button: 'next'            
              });
              stopTimer();
        }
    }

    trimSpaces(str) {
        return str.replace(/\s+/g, '');
    }


}

//REMEMBER TO STOP THE TIMER WHEN A USER SOLVES A LESSON