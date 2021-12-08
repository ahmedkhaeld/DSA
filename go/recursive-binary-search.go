package main

import "fmt"

func recursionBinarySearch(list []int, target int) int {
	if len(list) == 0 {
		return -1
	} else {
		midpoint := (len(list)) / 2

		if list[midpoint] == target {
			return midpoint
		} else {
			if list[midpoint] < target {
				return recursionBinarySearch(list[midpoint+1:], target)
			} else {
				return recursionBinarySearch(list[:midpoint], target)
			}
		}
	}
}

func main() {
	items := []int{1, 2, 9, 20, 31, 45, 63, 70, 100}
	position := recursionBinarySearch(items, 2)
	if position != -1 {
		fmt.Printf(" target found in list at position  %v", position)
	} else {
		fmt.Println("out of index ")

	}

}
