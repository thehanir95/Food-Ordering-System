import { Component, OnInit } from '@angular/core';
import { FormControl, Validators} from '@angular/forms';

@Component({
  selector: 'app-as-customer',
  templateUrl: './as-customer.component.html',
  styleUrls: ['./as-customer.component.scss']
})
export class AsCustomerComponent implements OnInit {
  hide = true;
  email = new FormControl('', [Validators.required, Validators.email]);



  fullname= new FormControl();
  address=new FormControl();
  mobileno=new FormControl();
  password=new FormControl();
  confirmpassword=new FormControl();

  constructor() { }

  ngOnInit() {
  }

  submit(){
    alert(this.fullname.value);
    alert(this.address.value);
    alert(this.mobileno.value);
    alert(this.email.value);
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
