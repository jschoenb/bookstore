import {Component, OnInit} from '@angular/core';
import {Book} from "../shared/book";
import {BookStoreService} from "../shared/book-store.service";
import {ActivatedRoute} from "@angular/router";
import {BookFactory} from "../shared/book-factory";

@Component({
  selector: 'bs-book-details',
  templateUrl: './book-details.component.html',
  styles: []
})
export class BookDetailsComponent implements OnInit {

  book: Book = BookFactory.empty();

  constructor(
      private bs: BookStoreService,
      private route: ActivatedRoute
  ) { }

  ngOnInit() {
    const params = this.route.snapshot.params;
    this.bs.getSingle(params['isbn']).subscribe(b => this.book=b);
  }

  getRating(num :number){
    return new Array(num);
  }

}
