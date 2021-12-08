package main

import "fmt"

func recursionBinarySearch(list []int, target int) (bool, int) {
	if len(list) == 0 {
		return false, 0
	} else {
		midpoint := (len(list)) / 2

		if list[midpoint] == target {
			return true, midpoint
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
	flag, position := recursionBinarySearch(items, 2)
	if flag != false {
		fmt.Printf("is target found in list?  [%v]  position at %v", flag, position)
	} else {
		fmt.Printf("is target found in list?  [%v] ", flag)

	}

}
