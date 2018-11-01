import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-medicine',
  templateUrl: './medicine.component.html',
  styleUrls: ['./medicine.component.css']
})
export class MedicineComponent implements OnInit {
  name:string;
  cost:number;
  id:string;


  constructor() { }

  ngOnInit() {
    this.name="strepcils";
    this.cost=30;
    this.id="MED_1";
  
  }

}
