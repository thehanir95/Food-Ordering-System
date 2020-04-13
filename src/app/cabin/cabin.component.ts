import { Component, OnInit } from '@angular/core';
import { FormControl,Validators } from '@angular/forms';

@Component({
  selector: 'app-cabin',
  templateUrl: './cabin.component.html',
  styleUrls: ['./cabin.component.scss']
})
export class CabinComponent implements OnInit {
  hide = true;
  email = new FormControl('', [Validators.required, Validators.email]);

  constructor() { }


  ngOnInit() {
  }

  foodcabinname=new FormControl();
  ownername=new FormControl();
  mobileno=new FormControl();
  address=new FormControl();
  password=new FormControl();
  confirmpassword=new FormControl();


  submit(){
    alert(this.foodcabinname.value);
    alert(this.ownername.value);
    alert(this.mobileno.value);
    alert(this.address.value);
    alert(this.password.value);
    alert(this.confirmpassword.value);
   
  }
  
  getErrorMessage() {
    if (this.email.hasError('required'))
    {
      return 'You must enter a value';
    }

    return this.email.hasError('email') ? 'Not a valid email' : '';
  }



}
