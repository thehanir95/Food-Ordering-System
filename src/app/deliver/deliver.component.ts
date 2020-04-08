import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';

import { from } from 'rxjs';

@Component({
  selector: 'app-deliver',
  templateUrl: './deliver.component.html',
  styleUrls: ['./deliver.component.scss']
})
export class DeliverComponent implements OnInit {
  fullname=new FormControl();
  address=new FormControl();
  mobileno=new FormControl();
  email=new FormControl();
  foodcabincode=new FormControl();
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
    alert(this.foodcabincode.value);
    alert(this.password.value);
    alert(this.confirmpassword.value);
  }
}
