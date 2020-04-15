import { Component, OnInit } from '@angular/core';
import { FormControl,Validators , FormBuilder, FormGroup,} from '@angular/forms';

@Component({
  selector: 'app-cabin',
  templateUrl: './cabin.component.html',
  styleUrls: ['./cabin.component.scss']
})
export class CabinComponent implements OnInit {
  hide = true;
  email = new FormControl('', [Validators.required, Validators.email]);
  
  
  isLinear = true;

  
  firstFormGroup: FormGroup;
  secondFormGroup: FormGroup;
  thirdFormGroup: FormGroup;
  forthFormGroup: FormGroup;
  fifthFormGroup: FormGroup;
  sixthFormGroup: FormGroup;
  seventhFormGroup: FormGroup;


  constructor( private _formBuilder: FormBuilder ) { }


  ngOnInit() { 
    this.firstFormGroup = this._formBuilder.group({
      firstCtrl: ['', Validators.required]
    });

    this.secondFormGroup = this._formBuilder.group({
      secondCtrl: ['', Validators.required]
    });

    
    this.thirdFormGroup = this._formBuilder.group({
      thirdCtrl: ['', Validators.required]
    });

    this.forthFormGroup = this._formBuilder.group({
      forthCtrl: ['', Validators.required]
    });

    this.fifthFormGroup = this._formBuilder.group({
      fifthCtrl: ['', Validators.required]
    });

    this.sixthFormGroup = this._formBuilder.group({
      sixthCtrl: ['', Validators.required]
    });

    this.seventhFormGroup = this._formBuilder.group({
      seventhCtrl: ['', Validators.required]
    });


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
